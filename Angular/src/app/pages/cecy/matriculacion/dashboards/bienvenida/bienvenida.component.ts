import { Component, OnInit } from "@angular/core";
import { SelectItem, MenuItem } from "primeng/api";
import {BreadcrumbService} from '../../../../../shared/breadcrumb/breadcrumb.service';
import { NgxSpinnerService } from "ngx-spinner";

@Component({
  selector: "app-dashboard-coordinador",
  templateUrl: "./bienvenida.component.html",
})
export class BienvenidaComponent implements OnInit {
    constructor(private breadcrumbService: BreadcrumbService, private spinner: NgxSpinnerService) {
        this.breadcrumbService.setItems([
            {label: 'CEC-Y', routerLink: ['/cecy/dashboard/bienvenida']},
        ]);
    }

  ngOnInit() {}
}
