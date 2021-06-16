import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { EventosDetalhePage } from './eventos-detalhe.page';

const routes: Routes = [
  {
    path: '',
    component: EventosDetalhePage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class EventosDetalhePageRoutingModule {}
