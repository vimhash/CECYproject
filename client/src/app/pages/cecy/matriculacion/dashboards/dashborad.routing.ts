import { Routes } from "@angular/router";
import { ParticipantesComponent } from "./participantes/participantes.component";
import { DocentesComponent } from "./docentes/docentes.component";

export const HomeRoutes: Routes = [
  {
    path: "",
    children: [
      {
        path: "participantes",
        component: ParticipantesComponent,
      },
      {
        path: "docentes",
        component: DocentesComponent,
      },
    ],
  },
];
