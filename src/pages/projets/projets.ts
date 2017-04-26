import { Component } from '@angular/core';

import { NavController } from 'ionic-angular';

import {Http} from "@angular/http";

@Component({
  selector: 'page-projets',
  templateUrl: 'projets.html'
})
export class projetsPage {

	posts: any;

  constructor(public http: Http) {


   this.http.get('http://seguin.chalon.codeur.online/api.php').map(res => res.json()).subscribe(data => {
        console.log(data);
        this.posts = data;
});

  }


}
