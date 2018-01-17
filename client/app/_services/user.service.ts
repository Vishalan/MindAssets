import { Injectable } from '@angular/core';
import { Http, Headers, RequestOptions, Response } from '@angular/http';

import { User } from '../_models/index';

@Injectable()
export class UserService {
    constructor(private http: Http) { }

    getAll() {
        return this.http.get('/users').map((response: Response) => response.json());
    }

    getById(_id: string) {
        return this.http.get('/users/' + _id).map((response: Response) => response.json());
    }

    create(user: User) {
        return this.http.post('/user', user).map((response: Response) => response.json());
    }

    update(user: User) {
        return this.http.put('/users/' + user._id, user).map((response: Response) => response.json());
    }

    delete(_id: string) {
        return this.http.delete('/users/' + _id).map((response: Response) => response.json());
    }
    verify(msg_id: string, user: User){
      console.log('/user/'+msg_id+'/verify');
        return this.http.post('/user/'+msg_id+'/verify',user).map((response: Response) => response.json());
    }
}
