import { Component, OnInit } from "@angular/core";
import { Message } from "primeng/api";
import { SelectItem, MenuItem } from "primeng/api";
import { BreadcrumbService } from "../../../../../shared/breadcrumb/breadcrumb.service";
import { NgxSpinnerService } from "ngx-spinner";

@Component({
  selector: "app-academic-records",
  templateUrl: "./academic-records.component.html",
})
export class AcademicRecordsComponent implements OnInit {
  msgs: Message[];

  uploadedFiles: any[] = [];

  constructor(
    private breadcrumbService: BreadcrumbService,
    private spinner: NgxSpinnerService
  ) {
    this.breadcrumbService.setItems([
      { label: "CEC-Y", routerLink: ["/cecy/dashboard/participantes"] },
    ]);
  }

  ngOnInit() {}

  onUpload(event) {
    for (const file of event.files) {
      this.uploadedFiles.push(file);
    }

    this.msgs = [];
    this.msgs.push({
      severity: "info",
      summary: "Success",
      detail: "Upload Completed",
    });
  }
}
