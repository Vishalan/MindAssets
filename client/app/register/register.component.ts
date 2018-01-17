import { Component } from '@angular/core';
import { Router } from '@angular/router';

import { AlertService, UserService } from '../_services/index';

@Component({
    moduleId: module.id,
    templateUrl: 'register.component.html'
})

export class RegisterComponent {
    model: any = {};
    loading = false;
    otpStep = false;
    finalStep = false;
    resend = false;
    msg_id = '';
    resendButtonText = 'Resend';
    constructor(
        private router: Router,
        private userService: UserService,
        private alertService: AlertService) { }
    validateOTP() {
        this.finalStep = true;
        // this.userService.verify(this.msg_id,this.model)
        //     .subscribe(
        //         data => {
        //             if(data['success'])
        //             {
        //               this.alertService.success('Registration successful', true);
        //               this.router.navigate(['/login']);
        //             }
        //             else
        //             {
        //               this.alertService.error(data['msg']);
        //             }
        //
        //         },
        //         error => {
        //             this.alertService.error(error);
        //             this.finalStep = false;
        //         });
        this.alertService.success('Registration successful', true);
    }
    register() {
        this.loading = true;
        this.userService.create(this.model)
            // .subscribe(
            //     data => {
            //         if(data['success'])
            //         {
            //           this.msg_id = data['msg']['msg'];
            //           this.alertService.success('Registration successful', true);
            //           console.log(this.msg_id);
            //           //this.router.navigate(['/login']);
            //             this.otpStep = true;
            //           this.loading = false;
            //           setTimeout(() => {
            //
            //               this.resend = false;
            //             }, 1000);
            //         }
            //         else
            //         {
            //           this.alertService.error(data['msg']);
            //           this.loading = false;
            //         }
            //
            //     },
            //     error => {
            //         this.alertService.error(error);
            //         this.loading = false;
            //     });

                this.alertService.success('OTP Sent to Mobile',false);
                console.log(this.msg_id);
                //this.router.navigate(['/login']);
                this.otpStep = true;
                this.loading = false;
                setTimeout(() => {
                    this.resend = true;
                  }, 30000);
    }
    resendOTP() {
        console.log("resendOTP");
    }
    changeDetails()
    {
      this.otpStep = false;
    }
}
