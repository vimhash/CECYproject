import { Component, OnInit } from "@angular/core";
//import {CountryService} from '../../../../demo/service/countryservice';
import { SelectItem, MenuItem } from "primeng/api";
import { BreadcrumbService } from "../../../../../shared/breadcrumb/breadcrumb.service";
//import { NgxSpinnerService } from "ngx-spinner";

import { CecyServiceService } from "../../../../../services/cecy/cecy-service.service";

@Component({
  selector: "app-registration",
  templateUrl: "./registration.component.html",
})
export class RegistrationComponent implements OnInit {
  work: boolean = false;
  sponsor: boolean = false;
  checkboxValuesKnowCourse: string[] = [];
  checkboxValuesCourseFollow: string[] = [];
  levelInstruction: SelectItem[];
  selectedFilter: any;

  constructor(
    private breadcrumbService: BreadcrumbService,
    private cecyService: CecyServiceService
  ) {
    this.breadcrumbService.setItems([
      { label: "CEC-Y", routerLink: ["/cecy/dashboard/participants"] },
      { label: "Cursos Gratuitos" },
    ]);
  }

  ngOnInit() {
    this.levelInstruction = [];
    this.levelInstruction.push({
      label: "Seleccione su nivel de intrucción",
      value: 0,
    });
    this.levelInstruction.push({
      label: "Primaria",
      value: { id: 1, name: "primary" },
    });
    this.levelInstruction.push({
      label: "Secundaria",
      value: { id: 2, name: "high-school" },
    });
    this.levelInstruction.push({
      label: "Tercer nivel",
      value: { id: 3, name: "degree" },
    });
  }

  saveRegistrationData() {
    console.log(this.checkboxValuesKnowCourse);
  }
}
