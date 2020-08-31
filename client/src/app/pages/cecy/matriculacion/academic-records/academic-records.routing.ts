import { Routes } from "@angular/router";
import { SeeAcademicRecordsComponent } from "./see-academic-records/see-academic-records.component";
import { NewAcademicRecordComponent } from "./new-academic-record/new-academic-record.component";

export const HomeRoutes: Routes = [
  {
    path: "",
    children: [
      {
        path: "see-academic-records",
        component: SeeAcademicRecordsComponent,
      },
      {
        path: "new-academic-record",
        component: NewAcademicRecordComponent,
      },
    ],
  },
];
