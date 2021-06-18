import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { EventosListPageRoutingModule } from './eventos-list-routing.module';

import { EventosListPage } from './eventos-list.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    EventosListPageRoutingModule
  ],
  declarations: [EventosListPage]
})
export class EventosListPageModule {}
