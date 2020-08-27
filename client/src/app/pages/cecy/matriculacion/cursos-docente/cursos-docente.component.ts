import { Component, OnInit } from "@angular/core";
//import {CountryService} from '../../../../demo/service/countryservice';
//import { SelectItem, MenuItem } from "primeng/api";
import { BreadcrumbService } from "../../../../shared/breadcrumb/breadcrumb.service";
// import { NgxSpinnerService } from "ngx-spinner";

@Component({
  selector: "app-cursos-docente",
  templateUrl: "./cursos-docente.component.html",
})
export class CursosDocentesComponent implements OnInit {
  constructor(private breadcrumbService: BreadcrumbService) {
    this.breadcrumbService.setItems([
      { label: "CEC-Y", routerLink: ["/cecy/cursos-docente"] },
      { label: "Cursos Docente" },
    ]);
  }

  ngOnInit() {}
}
