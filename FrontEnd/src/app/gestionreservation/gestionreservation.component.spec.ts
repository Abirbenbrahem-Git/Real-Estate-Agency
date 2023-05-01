import { ComponentFixture, TestBed } from '@angular/core/testing';

import { GestionreservationComponent } from './gestionreservation.component';

describe('GestionreservationComponent', () => {
  let component: GestionreservationComponent;
  let fixture: ComponentFixture<GestionreservationComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ GestionreservationComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(GestionreservationComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
