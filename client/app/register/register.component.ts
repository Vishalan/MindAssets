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
    otpStep = true;
    finalStep = false;
    msg_id = "";
    constructor(
        private router: Router,
        private userService: UserService,
        private alertService: AlertService) { }
    validateOTP() {
        this.otpStep = false;
        this.finalStep = true;
        this.userService.verify(this.msg_id,this.model)
            .subscribe(
                data => {
                    this.alertService.success('Registration successful', true);
                    this.router.navigate(['/login']);

                },
                error => {
                    this.alertService.error(error);
                    this.finalStep = false;
                });
    }
    register() {
        this.loading = true;
        this.userService.create(this.model)
            .subscribe(
                data => {
                    this.msg_id = data.json()["msg"];
                    this.alertService.success('Registration successful', true);
                    console.log(this.msg_id);
                    //this.router.navigate(['/login']);
                    this.otpStep = false;
                    this.loading = false;
                },
                error => {
                    this.alertService.error(error);
                    this.loading = false;
                });
    }

}
