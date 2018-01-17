"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
Object.defineProperty(exports, "__esModule", { value: true });
var core_1 = require("@angular/core");
var router_1 = require("@angular/router");
var index_1 = require("../_services/index");
var RegisterComponent = /** @class */ (function () {
    function RegisterComponent(router, userService, alertService) {
        this.router = router;
        this.userService = userService;
        this.alertService = alertService;
        this.model = {};
        this.loading = false;
        this.otpStep = false;
        this.finalStep = false;
        this.resend = false;
        this.msg_id = '';
        this.resendButtonText = 'Resend';
    }
    RegisterComponent.prototype.validateOTP = function () {
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
    };
    RegisterComponent.prototype.register = function () {
        var _this = this;
        this.loading = true;
        this.userService.create(this.model);
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
        this.alertService.success('OTP Sent to Mobile', false);
        console.log(this.msg_id);
        //this.router.navigate(['/login']);
        this.otpStep = true;
        this.loading = false;
        setTimeout(function () {
            _this.resend = true;
        }, 30000);
    };
    RegisterComponent.prototype.resendOTP = function () {
        console.log("resendOTP");
    };
    RegisterComponent.prototype.changeDetails = function () {
        this.otpStep = false;
    };
    RegisterComponent = __decorate([
        core_1.Component({
            moduleId: module.id,
            templateUrl: 'register.component.html'
        }),
        __metadata("design:paramtypes", [router_1.Router,
            index_1.UserService,
            index_1.AlertService])
    ], RegisterComponent);
    return RegisterComponent;
}());
exports.RegisterComponent = RegisterComponent;
//# sourceMappingURL=register.component.js.map