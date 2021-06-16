import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { EventosDetalhePageRoutingModule } from './eventos-detalhe-routing.module';

import { EventosDetalhePage } from './eventos-detalhe.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    EventosDetalhePageRoutingModule
  ],
  declarations: [EventosDetalhePage]
})
export class EventosDetalhePageModule {}
