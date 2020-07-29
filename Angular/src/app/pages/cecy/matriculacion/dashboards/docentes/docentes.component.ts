import { Component, OnInit } from "@angular/core";
import { SelectItem } from "primeng/api";
import { BreadcrumbService } from "../../../../../shared/breadcrumb/breadcrumb.service";

@Component({
  selector: "app-docentes",
  templateUrl: "./docentes.component.html",
})
export class DocentesComponent implements OnInit {
      cities: SelectItem[];
  constructor(
    private breadcrumbService: BreadcrumbService  ) {
    this.breadcrumbService.setItems([
      { label: "CEC-Y", routerLink: ["/cecy/dashboard/docentes"] },
    ]);
  }

  ngOnInit() {
    this.cities = [];
    this.cities.push({ label: 'JUNIO 2020 - OCTUBRE 2020', value: { id: 1, name: 'JUNIO 2020 - OCTUBRE 2020', code: 'JO' } });
    this.cities.push({ label: 'SEPTIEMBRE 2020 - ABRIL 2020', value: { id: 2, name: 'SEPTIEMBRE 2020 - ABRIL 2020', code: 'SA' } });
  }
}
