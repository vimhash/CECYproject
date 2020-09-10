import { Routes } from "@angular/router";

import { PaidCoursesComponent } from "./matriculacion/paid-courses/paid-courses.component";
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
  {
    path: "cursos-pago",
    component: PaidCoursesComponent,
  },
  {
    path: "mis-cursos",
    component: MisCursosComponent,
  },
];
