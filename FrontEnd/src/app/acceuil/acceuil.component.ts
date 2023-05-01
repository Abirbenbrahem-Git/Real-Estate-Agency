import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-acceuil',
  templateUrl: './acceuil.component.html',
  styleUrls: ['./acceuil.component.css', './css/bootstrap.min.css', './css/style.css', './lib/owlcarousel/assets/owl.carousel.min.css', './lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css']
})
export class AcceuilComponent implements OnInit {
  postsList: any = [];

  ngOnInit(): void {
   
  }

}
