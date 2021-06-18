import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: 'home',
    loadChildren: () => import('./home/home.module').then( m => m.HomePageModule)
  },
  {
    path: '',
    redirectTo: 'home',
    pathMatch: 'full'
  },
  {
    path: 'create-account',
    loadChildren: () => import('./create-account/create-account.module').then( m => m.CreateAccountPageModule)
  },
  {
    path: 'login',
    loadChildren: () => import('./login/login.module').then( m => m.LoginPageModule)
  },
  {
    path: 'eventos-list',
    loadChildren: () => import('./eventos-list/eventos-list.module').then( m => m.EventosListPageModule)
  },
  {
    path: 'eventos-detalhe',
    loadChildren: () => import('./eventos-detalhe/eventos-detalhe.module').then( m => m.EventosDetalhePageModule)
  },
  {
    path: 'eventos-editar',
    loadChildren: () => import('./eventos-editar/eventos-editar.module').then( m => m.EventosEditarPageModule)
  },

];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
