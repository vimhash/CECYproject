import { Component, OnInit } from "@angular/core";
//import {CountryService} from '../../../../demo/service/countryservice';
//import { SelectItem, MenuItem } from "primeng/api";
import { BreadcrumbService } from "../../../../shared/breadcrumb/breadcrumb.service";
//import { NgxSpinnerService } from "ngx-spinner";

import { CecyServiceService } from "../../../../services/cecy/cecy-service.service";

@Component({
  selector: "app-dashboard-coordinador",
  templateUrl: "./cursos-gratuitos.component.html",
})
export class CursosGratuitosComponent implements OnInit {
  coursesList: [];

  constructor(
    private breadcrumbService: BreadcrumbService,
    private cecyService: CecyServiceService
  ) {
    this.breadcrumbService.setItems([
      { label: "CEC-Y", routerLink: ["/cecy/dashboard/docentes"] },
      { label: "Cursos Gratuitos" },
    ]);
  }

  ngOnInit() {
    this.obtenerCursosGratuitos();
  }

  obtenerCursosGratuitos() {
    this.cecyService
      .get("courses/filter?for_free=true")
      .subscribe((response: any) => {
        this.coursesList = response.data.attributes;
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
