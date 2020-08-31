import { Routes } from "@angular/router";
import { CoursesComponent } from "./courses/courses.component";
import { DetailsCourseComponent } from "./details-course/details-course.component";

export const HomeRoutes: Routes = [
  {
    path: "",
    children: [
      {
        path: "courses",
        component: CoursesComponent,
      },
      {
        path: "details",
        component: DetailsCourseComponent,
      },
    ],
  },
];
