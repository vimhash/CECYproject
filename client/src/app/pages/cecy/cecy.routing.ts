import { Routes } from "@angular/router";

// import { CursosGratuitosComponent } from "./matriculacion/cursos-gratuitos/cursos-gratuitos.component";
import { CursosPagoComponent } from "./matriculacion/cursos-pago/cursos-pago.component";
import { MisCursosComponent } from "./matriculacion/mis-cursos/mis-cursos.component";
import { CursosDocentesComponent } from "./matriculacion/cursos-docente/cursos-docente.component";
import { NotasDocentesComponent } from "./matriculacion/notas-docente/notas-docente.component";

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
        path: "free-courses",
        loadChildren: () =>
          import("./matriculacion/free-courses/free-courses.module").then(
            (m) => m.DashboardModule
          ),
      },
      {
        path: "academic-records",
        loadChildren: () =>
          import(
            "./matriculacion/academic-records/academic-records.module"
          ).then((m) => m.DashboardModule),
      },
    ],
  },
  // {
  //   path: "cursos-gratuitos",
  //   component: CursosGratuitosComponent,
  // },
  {
    path: "cursos-pago",
    component: CursosPagoComponent,
  },
  {
    path: "mis-cursos",
    component: MisCursosComponent,
  },
  {
    path: "cursos-docente",
    component: CursosDocentesComponent,
  },
  {
    path: "notas-docente",
    component: NotasDocentesComponent,
  },
];
