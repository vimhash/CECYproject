import { Component, OnInit } from "@angular/core";
//import {CountryService} from '../../../../demo/service/countryservice';
//import { SelectItem, MenuItem } from "primeng/api";
import { BreadcrumbService } from "../../../../shared/breadcrumb/breadcrumb.service";
//import { NgxSpinnerService } from "ngx-spinner";

@Component({
  selector: "app-notas-docente",
  templateUrl: "./notas-docente.component.html",
})
export class NotasDocentesComponent implements OnInit {
  constructor(private breadcrumbService: BreadcrumbService) {
    this.breadcrumbService.setItems([
      { label: "CEC-Y", routerLink: ["/cecy/notas-docente"] },
      { label: "Notas Docente" },
    ]);
  }

  ngOnInit() {}
}
