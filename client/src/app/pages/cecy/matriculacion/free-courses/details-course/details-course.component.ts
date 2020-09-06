import { Component, OnInit } from "@angular/core";
//import {CountryService} from '../../../../demo/service/countryservice';
//import { SelectItem, MenuItem } from "primeng/api";
import { BreadcrumbService } from "../../../../../shared/breadcrumb/breadcrumb.service";
//import { NgxSpinnerService } from "ngx-spinner";

import { CecyServiceService } from "../../../../../services/cecy/cecy-service.service";

@Component({
  selector: "app-details-course",
  templateUrl: "./details-course.component.html",
})
export class DetailsCourseComponent implements OnInit {
  coursesList: [];
  carouselCars = [];
  images: any[];

  constructor(
    private breadcrumbService: BreadcrumbService,
    private cecyService: CecyServiceService
  ) {
    this.breadcrumbService.setItems([
      { label: "CEC-Y", routerLink: ["/cecy/dashboard/participants"] },
      { label: "Cursos Gratuitos", routerLink: ["/cecy/free-courses/courses"] },
      { label: "Detalles De Curso" },
    ]);
  }

  ngOnInit() {
    this.obtenerCursosGratuitos();

    this.carouselCars = [
      { vin: "r3278r2", year: 2010, brand: "Audi", color: "Black" },
      { vin: "jhto2g2", year: 2015, brand: "BMW", color: "White" },
      { vin: "h453w54", year: 2012, brand: "Honda", color: "Blue" },
      { vin: "g43gwwg", year: 1998, brand: "Renault", color: "White" },
      { vin: "gf45wg5", year: 2011, brand: "Volkswagen", color: "Red" },
      { vin: "bhv5y5w", year: 2015, brand: "Jaguar", color: "Blue" },
      { vin: "ybw5fsd", year: 2012, brand: "Ford", color: "Yellow" },
      { vin: "45665e5", year: 2011, brand: "Mercedes", color: "Brown" },
      { vin: "he6sb5v", year: 2015, brand: "Ford", color: "Black" },
    ];

    this.images = [];
    this.images.push({
      source: "assets/demo/images/sopranos/sopranos1.jpg",
      thumbnail: "assets/demo/images/sopranos/sopranos1_small.jpg",
      title: "Sopranos 1",
    });
    this.images.push({
      source: "assets/demo/images/sopranos/sopranos2.jpg",
      thumbnail: "assets/demo/images/sopranos/sopranos2_small.jpg",
      title: "Sopranos 2",
    });
    this.images.push({
      source: "assets/demo/images/sopranos/sopranos3.jpg",
      thumbnail: "assets/demo/images/sopranos/sopranos3_small.jpg",
      title: "Sopranos 3",
    });
    this.images.push({
      source: "assets/demo/images/sopranos/sopranos4.jpg",
      thumbnail: "assets/demo/images/sopranos/sopranos4_small.jpg",
      title: "Sopranos 4",
    });
  }

  obtenerCursosGratuitos() {
    this.cecyService
      .get("courses/filter?for_free=true")
      .subscribe((response: any) => {
        this.coursesList = response.data.attributes;
      });
  }

  // guardar() {
  //   this.cecyService
  //     .post("courses", {
  //       name: "test2",
  //     })
  //     .subscribe((response) => {
  //       console.log(response);
  //     });
  // }

  // actualizar() {
  //   let id = prompt("Ingrese ID"),
  //     text = prompt("TEXTO");

  //   this.cecyService
  //     .update("courses/" + id, {
  //       name: text,
  //     })
  //     .subscribe((response) => {
  //       console.log(response);
  //     });
  // }

  // eliminar() {
  //   let id = prompt("Ingrese ID");

  //   this.cecyService.delete("courses/" + id).subscribe((response) => {
  //     console.log(response);
  //   });
  // }
}
