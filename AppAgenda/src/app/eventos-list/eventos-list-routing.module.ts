import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { EventosListPage } from './eventos-list.page';

const routes: Routes = [
  {
    path: '',
    component: EventosListPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class EventosListPageRoutingModule {}
