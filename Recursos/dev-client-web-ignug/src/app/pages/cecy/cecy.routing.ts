import {Routes} from '@angular/router';

export const CecyRoutes: Routes = [
    {
        path: '',
        children: [
          {
              path: 'dashboard',
              loadChildren: () => import('./matriculacion/dashboards/dashboard.module').then(m => m.DashboardModule)
          },
          {
              path: 'cupo',
              loadChildren: () => import('./matriculacion/cupo/cupo.module').then(m => m.CupoModule)
          },
        ]
    }
];
