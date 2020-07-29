import { Component, OnInit } from "@angular/core";
import { SelectItem, MenuItem } from "primeng/api";
import { BreadcrumbService } from "../../../../../shared/breadcrumb/breadcrumb.service";
import { NgxSpinnerService } from "ngx-spinner";

@Component({
  selector: "app-docentes",
  templateUrl: "./docentes.component.html",
})
export class DocentesComponent implements OnInit {
  constructor(
    private breadcrumbService: BreadcrumbService,
    private spinner: NgxSpinnerService
  ) {
    this.breadcrumbService.setItems([
      { label: "CEC-Y", routerLink: ["/cecy/dashboard/docentes"] },
    ]);
  }

  ngOnInit() {}
}
