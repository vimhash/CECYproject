import { Routes } from "@angular/router";

import { CursosGratuitosComponent } from "./matriculacion/cursos-gratuitos/cursos-gratuitos.component";
import { CursosPagoComponent } from "./matriculacion/cursos-pago/cursos-pago.component";
import { MisCursosComponent } from "./matriculacion/mis-cursos/mis-cursos.component";

export const CecyRoutes: Routes = [
  {
    path: "",
    children: [
      {
        path: "dashboard",
        loadChildren: () =>
          import("./matriculacion/dashboards/dashboard.module").then(
            (m) => m.DashboardModule
          ),
      },
      {
        path: "cupo",
        loadChildren: () =>
          import("./matriculacion/cupo/cupo.module").then((m) => m.CupoModule),
      },
    ],
  },
  {
    path: "cursos-gratuitos",
    component: CursosGratuitosComponent,
  },
  {
    path: "cursos-pago",
    component: CursosPagoComponent,
  },
  {
    path: "mis-cursos",
    component: MisCursosComponent,
  },
];
