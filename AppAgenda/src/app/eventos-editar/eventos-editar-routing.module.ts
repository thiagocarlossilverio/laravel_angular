import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { EventosEditarPage } from './eventos-editar.page';

const routes: Routes = [
  {
    path: '',
    component: EventosEditarPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class EventosEditarPageRoutingModule {}
