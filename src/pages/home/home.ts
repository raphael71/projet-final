 import { Component } from '@angular/core';

import { NavController } from 'ionic-angular';
import { projetsPage } from '../projets/projets';
import { AboutPage } from '../about/about';
import {Http} from "@angular/http";

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {

	posts: any;

  constructor(public http: Http) {


   this.http.get('http://seguin.chalon.codeur.online/api.php').map(res => res.json()).subscribe(data => {
        console.log(data);
        this.posts = data;
});

  }
  projet=projetsPage;
  MonCV=AboutPage;

}
