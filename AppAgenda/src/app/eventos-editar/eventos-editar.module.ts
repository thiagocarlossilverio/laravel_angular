import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { EventosEditarPageRoutingModule } from './eventos-editar-routing.module';

import { EventosEditarPage } from './eventos-editar.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    EventosEditarPageRoutingModule
  ],
  declarations: [EventosEditarPage]
})
export class EventosEditarPageModule {}
