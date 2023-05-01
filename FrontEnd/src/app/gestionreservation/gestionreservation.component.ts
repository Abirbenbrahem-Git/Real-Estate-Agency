import { Component } from '@angular/core';

@Component({
  selector: 'app-gestionreservation',
  templateUrl: './gestionreservation.component.html',
  styleUrls: ['./gestionreservation.component.css','./css/bootstrap.min.css']
})
export class GestionreservationComponent {
  appartement1= {
    nomclient:'',
    nom :'',
    prix: '',
    imageurl:''

  }

  appartements1 :any[]=[];

  ajout(){
    this.appartements1.push(this.appartement1);
    this.appartement1= {
      nomclient:'',
      nom :'',
      prix: '',
      imageurl:''
    }
  }

}
