var User = require('../models/User');
var jwt = require('jwt-simple');
var config = require('../../config');

// route to authenticate a user (POST http://localhost:8080/app_api/authenticate)
//authorise the user to be able to use the app
module.exports.authUser = function(request, response) {

    //Search to identify user
    User.findOne({
        mobilePhone: request.body.mobilePhone
    }, function(err, user) {

        //If we have an error, or the mobilePhone is not present provide feedback.
        if (err) throw err;
        if (!user) {
            response.send({
                success: false,
                msg: 'Authentication failed.'
            });

        } else {

            //User does exist. It is now time to compare the password with that
            //which has been stored.
            user.comparePassword(request.body.password, function(err, isMatch) {
                if (isMatch && !err) {

                    //Generate the user token
                    var token_data = {
                        id: user._id,
                        dateLogOn: new Date()
                    };
                    //In the above example, I have also decided to encode the
                    //logon date.

                    //Encode the information
                    var token = jwt.encode(token_data, config.secret);

                    // return the information including token as JSON
                    response.json({
                        success: true,
                        token: 'JWT ' + token,
                        msg: ""
                    });

                } else {

                    //Throw password error if they do not match
                    response.send({
                        success: false,
                        msg: 'Authentication failed.'
                    });
                }
            });
        }
    });
};

// create a new user account (POST http://localhost:8080/app_api/user/)
module.exports.userCreate = function(request, response) {

    //Collect the body information
    var reqBody = request.body;

    if (!reqBody.mobilePhone) {
        response.json({
            success: false,
            msg: 'Please pass Mobile Phone number'
        });
    }
    else if (!reqBody.email) {
        response.json({
            success: false,
            msg: 'Please pass email.'
        });
    } else if (!reqBody.password) {
        response.json({
            success: false,
            msg: 'Please pass password.'
        });
    } else {

        // Create a new user based on form parameters
        var user = new User({
            firstName: reqBody.firstName,
            lastName: reqBody.lastName,
            mobilePhone: reqBody.mobilePhone,
            password: reqBody.password,
            email: reqBody.email,
            countryCode: +91
        });

        user.save(function(err, doc) {
            if (err) {
                if (err.code == 11000) {
                    return response.json({
                        success: false,
                        msg: "Phone Number already registered."
                    });
                } else {
                    //Throw error message if not known
                    response.send({
                        success: false,
                        msg: err
                    });
                }
            } else {
                //We may not to want to always send SMS messages.
                if (config.enableValidationSMS == 1) {
                    // If the user is created successfully, send them an account
                    // verification token
                    user.sendAuthyToken(function(err) {
                        if (err) {
                            response.send({
                                success: false,
                                msg: err
                            });
                        } else {
                            // Send for verification page
                            response.send({
                                success: true,
                                msg: {
                                    msg: doc._id
                                }
                            });
                        }
                    });
                } else {

                    //If we do not want to enable sms verification lets register and send confirmation
                    response.send({
                        success: true,
                        msg: {
                            msg: "Account created (SMS validation false)"
                        }
                    });
                }
            }
        });
    }
};

// Require sms verification (POST http://localhost:8080/app_api/user/:id/verify)
// Handle submission of verification token
module.exports.verify = function(request, response) {
    var user;

    // Load user model
    User.findOne({
        mobilePhone: request.body.mobilePhone
    }, function(err, doc) {
        if (err || !doc) {
            return response.send({
                success: false,
                msg: "User not found registered with this mobile phone"
            });
        }

        // If we find the user, let's validate the token they entered
        user = doc;
        user.verifyAuthyToken(request.body.mobileotp, postVerify);
    });

    // Handle verification response
    function postVerify(err) {
        if (err) {
            return response.send({
                success: false,
                msg: "The token you entered was invalid - please retry."
            });
        }

        // If the token was valid, flip the bit to validate the user account
        user.mobileVerified = true;
        user.save(postSave);
    }

    // after we save the user, handle sending a confirmation
    function postSave(err) {
        if (err) {
            return response.send({
                success: true,
                msg: "There was a problem validating your account."
            });
        }

        // Send confirmation text message
        var message = 'You did it! Your signup is complete and you can now use the App :)';
        user.sendMessage(message, function(err) {
            if (err) {
                return response.send({
                    success: true,
                    msg: "You are signed up, but we could not send you a text message. Our bad - try to login."
                });
            }
            // show success page
            response.send({
                success: true,
                msg: message
            });
        });
    }

    // respond with an error not current used
    function die(message) {
        response.send({
            success: false,
            msg: message
        });
    }

};

// Provide user details (GET http://localhost:8080/app_api/user/)
module.exports.getUser = function(request, response) {

    //Obtain the header token for authentication
    var token = getToken(request.headers);

    if (token) {
        //Seek to decode the token
        var decoded = jwt.decode(token, config.secret);
        console.log(decoded)

        //By decoding the secret key we should be able to find the user
        User.findById(
            decoded.id,
            function(err, user) {
                if (err) throw err;
                if (!user) {

                    //Take note of the status header
                    //Return response
                    return response.status(403).send({
                        success: false,
                        msg: 'Authentication failed.'
                    });
                } else {

                    //Build user payload and return to user
                    response.json({
                        success: true,
                        msg: {
                            mobilePhone: user.mobilePhone,
                            createdAt: user.createdAt
                        }
                    });

                }
            });
    } else {

        //Return user response
        return response.status(403).send({
            success: false,
            msg: 'No token provided.'
        });
    }
};
module.exports.resend = function(request, response) {
    // Load user model
    User.findOne({
        mobilePhone: request.body.mobilePhone
    }, function(err, user) {
        if (err || !user) {
            return die('User not found for this ID.');
        }

        // If we find the user, let's send them a new code
        user.sendAuthyToken(postSend);
    });

    // Handle send code response
    function postSend(err) {
        if (err) {
            return die('There was a problem sending you the code - please '
                + 'retry.');
        }

        request.flash('successes', 'Code re-sent!');
        response.redirect('/users/'+request.params.id+'/verify');
    }

    // respond with an error
    function die(message) {
        request.flash('errors', message);
        response.redirect('/users/'+request.params.id+'/verify');
    }
};

//Obtain the user token ready for authorisation.
//This splits the header to ensure we are able to obtain the unique parts
getToken = function(headers) {
    if (headers && headers.authorization) {
        var parted = headers.authorization.split(' ');
        if (parted.length === 2) {
            return parted[1];
        } else {
            return null;
        }
    } else {
        return null;
    }
};
