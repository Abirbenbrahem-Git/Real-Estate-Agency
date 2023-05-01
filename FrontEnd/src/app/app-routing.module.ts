import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { DetailComponent } from './detail/detail.component';
import { AcceuilComponent } from './acceuil/acceuil.component';
import { InscriptionComponent } from './inscription/inscription.component';
import { AuthentifierComponent } from './authentifier/authentifier.component';
import { ReservationComponent } from './reservation/reservation.component';
import { PayementComponent } from './payement/payement.component';



const routes: Routes = [ 

  { path: '', component:AcceuilComponent },
    { path: 'detail', component: DetailComponent},
    { path: 'acceuil', component:AcceuilComponent },
    { path: 'inscription', component:InscriptionComponent },
    { path: 'authentifier', component:AuthentifierComponent },
    { path: 'reservation', component:ReservationComponent},
    { path: 'payement', component:PayementComponent}


 ];

@NgModule({
    imports: [RouterModule.forRoot(routes)],
    exports: [RouterModule]
  })
  export class AppRoutingModule { }