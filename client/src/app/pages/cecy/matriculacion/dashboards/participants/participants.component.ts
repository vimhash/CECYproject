import { Component, OnInit } from "@angular/core";
import { SelectItem, MenuItem } from "primeng/api";
import { BreadcrumbService } from "../../../../../shared/breadcrumb/breadcrumb.service";
import { NgxSpinnerService } from "ngx-spinner";

@Component({
  selector: "app-participants",
  templateUrl: "./participants.component.html",
})
export class ParticipantsComponent implements OnInit {
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
