import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import * as $ from 'jquery';
@Component({
  selector: 'page-about',
  templateUrl: 'about.html'

})

export class AboutPage {

  constructor(public navCtrl: NavController) {
  

		$(document).ready(function() {
  

  			$ ('#bouton').on('click',function(e){
		
		
		
			e.preventDefault();
		
		
		
		// //form input ordinaire, le ".val() recupere sa valeur 
		
		 var votrenom =$('#votrenom').val();
		 var votreemail =$('#votreemail').val();
		 var votremessage =$('#votremessage').val();
		 var sujet =$('#sujet').val();

		
		// //objet json qui va etre envoyeé a l'api
		
									
		
		 var json={
		
		 	"nom":votrenom,
		 	"email":votreemail,
		 	"message": votremessage,
		 	"sujet": sujet
		
		
					};
		
		
		// // requete ajax
		
		  $.ajax({
		  			type:'POST',
					url:'http://seguin.chalon.codeur.online/mail.php',
		  			crossDomain: true,
		  			data: { "dataMail": json},
		  			success: function(data){
		  				console.log('salut');

		  			},
		
		 		});
		
		
		  	});


  		});		
		
  	}


 } 											


   
                                   

                                         

                                     



                                        

