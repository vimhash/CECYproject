import { Component, OnInit } from "@angular/core";
//import {CountryService} from '../../../../demo/service/countryservice';
//import { SelectItem, MenuItem } from "primeng/api";
import {BreadcrumbService} from '../../../../shared/breadcrumb/breadcrumb.service';
//import { NgxSpinnerService } from "ngx-spinner";

@Component({
  selector: "app-dashboard-coordinador",
  templateUrl: "./cursos-gratuitos.component.html",
})
export class CursosGratuitosComponent implements OnInit {
   constructor(private breadcrumbService: BreadcrumbService) {
        this.breadcrumbService.setItems([
            {label: 'CEC-Y', routerLink: ['/cecy/dashboard/bienvenida']},
            {label: 'Cursos Gratuitos'},
        ]);
    }

  ngOnInit() {}
}
