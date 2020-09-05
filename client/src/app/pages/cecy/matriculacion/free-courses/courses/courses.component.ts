import { Component, OnInit } from "@angular/core";
//import {CountryService} from '../../../../demo/service/countryservice';
import { SelectItem, MenuItem } from "primeng/api";
import { BreadcrumbService } from "../../../../../shared/breadcrumb/breadcrumb.service";
//import { NgxSpinnerService } from "ngx-spinner";

import { CecyServiceService } from "../../../../../services/cecy/cecy-service.service";

@Component({
  selector: "app-courses",
  templateUrl: "./courses.component.html",
})
export class CoursesComponent implements OnInit {
  coursesList: [];

  selectedFilter: any;
  coursesTypes: SelectItem[];

  constructor(
    private breadcrumbService: BreadcrumbService,
    private cecyService: CecyServiceService
  ) {
    this.breadcrumbService.setItems([
      { label: "CEC-Y", routerLink: ["/cecy/dashboard/participants"] },
      { label: "Cursos Gratuitos" },
    ]);
  }

  ngOnInit() {
    this.obtenerCursosGratuitos();

    this.coursesTypes = [];
    this.coursesTypes.push({ label: "Select Filter", value: 0 });
    this.coursesTypes.push({
      label: "Inglés",
      value: { id: 1, name: "English" },
    });
    this.coursesTypes.push({
      label: "Emprendimiento",
      value: { id: 2, name: "Entrepeneur" },
    });
    this.coursesTypes.push({
      label: "Desarrollo de Software",
      value: { id: 3, name: "Software Development" },
    });
  }

  obtenerCursosGratuitos() {
    this.cecyService
      .get("planification?free=true")
      .subscribe((response: any) => {
        this.coursesList = response.data.attributes;
        console.log(response.data.attributes);
      });
  }

  // guardar() {
  //   this.cecyService
  //     .post("courses", {
  //       name: "test2",
  //     })
  //     .subscribe((response) => {
  //       console.log(response);
  //     });
  // }

  // actualizar() {
  //   let id = prompt("Ingrese ID"),
  //     text = prompt("TEXTO");

  //   this.cecyService
  //     .update("courses/" + id, {
  //       name: text,
  //     })
  //     .subscribe((response) => {
  //       console.log(response);
  //     });
  // }

  // eliminar() {
  //   let id = prompt("Ingrese ID");

  //   this.cecyService.delete("courses/" + id).subscribe((response) => {
  //     console.log(response);
  //   });
  // }
}
