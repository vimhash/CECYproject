import { Component, OnInit } from "@angular/core";
import { SelectItem, MenuItem } from "primeng/api";
import { BreadcrumbService } from "../../../../../shared/breadcrumb/breadcrumb.service";
import { NgxSpinnerService } from "ngx-spinner";

@Component({
  selector: "app-academic-records",
  templateUrl: "./academic-records.component.html",
})
export class AcademicRecordsComponent implements OnInit {
  constructor(
    private breadcrumbService: BreadcrumbService,
    private spinner: NgxSpinnerService
  ) {
    this.breadcrumbService.setItems([
      { label: "CEC-Y", routerLink: ["/cecy/dashboard/participantes"] },
    ]);
  }

  ngOnInit() {}
}
