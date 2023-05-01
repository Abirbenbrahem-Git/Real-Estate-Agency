import { Component } from '@angular/core';
import { Validators } from '@angular/forms';

@Component({
  selector: 'app-authentifier',
  templateUrl: './authentifier.component.html',
  styleUrls: ['./authentifier.component.css']
})
export class AuthentifierComponent {
  submit(login: any){
    console.log("formulaire envoye",login)
    //console.log(login.form.controls)
  }

}
