import {Routes} from '@angular/router';
import { CursosPagoComponent } from './matriculacion/cursos-pago/cursos-pago.component';
export const CecyRoutes: Routes = [
    {
        path: '',
        children: [
          {
              path: 'dashboard',
              loadChildren: () => import('./matriculacion/dashboards/dashboard.module').then(m => m.DashboardModule)
          },
          {
            path: "cursos-pago",
            component: CursosPagoComponent,
          },
          {
              path: 'cupo',
              loadChildren: () => import('./matriculacion/cupo/cupo.module').then(m => m.CupoModule)
          },
        ]
    }
];
