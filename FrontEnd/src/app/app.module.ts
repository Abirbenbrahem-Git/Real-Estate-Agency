import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule } from '@angular/forms';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { AuthentifierComponent } from './authentifier/authentifier.component';
import { InscriptionComponent } from './inscription/inscription.component';
import { AcceuilComponent } from './acceuil/acceuil.component';
import { CreerimmoComponent } from './creerimmo/creerimmo.component';
import { ReservationComponent } from './reservation/reservation.component';
import { GestionreservationComponent } from './gestionreservation/gestionreservation.component';
import { PayementComponent } from './payement/payement.component';
import { DetailComponent } from './detail/detail.component';

@NgModule({
  declarations: [
    AppComponent,
    AuthentifierComponent,
    InscriptionComponent,
    AcceuilComponent,
    CreerimmoComponent,
    ReservationComponent,
    GestionreservationComponent,
    PayementComponent,
    DetailComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
