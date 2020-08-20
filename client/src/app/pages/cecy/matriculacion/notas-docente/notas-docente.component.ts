import { Component, OnInit } from "@angular/core";
//import {CountryService} from '../../../../demo/service/countryservice';
//import { SelectItem, MenuItem } from "primeng/api";
import { BreadcrumbService } from "../../../../shared/breadcrumb/breadcrumb.service";
import { CarService } from "src/app/demo/service/carservice";
import { Car } from "src/app/demo/domain/car";
import { SelectItem } from "primeng/api";
//import { NgxSpinnerService } from "ngx-spinner";

@Component({
  selector: "app-notas-docente",
  templateUrl: "./notas-docente.component.html",
})
export class NotasDocentesComponent implements OnInit {
  cars1: Car[];

  cols: any[];

  // selectedCar: Car;

  brands: SelectItem[];

  colors: SelectItem[];

  sortKey: string;

  sortField: string;

  sortOrder: number;

  fullCalendarOptions: any;

  timeout: any;

  responsiveOptions: any;

  constructor(
    private carService: CarService,
    private breadcrumbService: BreadcrumbService
  ) {
    this.breadcrumbService.setItems([
      { label: "CEC-Y", routerLink: ["/cecy/notas-docente"] },
      { label: "Notas Docente" },
    ]);
  }

  ngOnInit() {
    this.carService.getCarsLarge().then((cars) => (this.cars1 = cars));
    this.cols = [
      { field: "vin", header: "Vin" },
      { field: "year", header: "Year" },
      { field: "brand", header: "Brand" },
      { field: "color", header: "Color" },
    ];
  }
}
