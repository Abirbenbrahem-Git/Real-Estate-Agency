import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-creerimmo',
  templateUrl: './creerimmo.component.html',
  styleUrls: ['./creerimmo.component.css', './css/bootstrap.min.css']
})
export class CreerimmoComponent implements OnInit {

  appartement = {
    nom: '',
    prix: '',
    imageurl: '',
    description: '',
    type: ''
  }

  appartements: any = [];

  ajout() {
    this.appartements.push(this.appartement);
    this.appartement = {
      nom: '',
      prix: '',
      imageurl: '',
      description: '',
      type: ''
    }
  }
  constructor() { }
  ngOnInit(): void {

  }
}
