import {Component, OnInit} from '@angular/core';
//import {CountryService} from '../../../../demo/service/countryservice';
import {SelectItem, MenuItem} from 'primeng/api';
import {BreadcrumbService} from '../../../../shared/breadcrumb/breadcrumb.service';

@Component({
    selector: 'app-cursos-pago',
    templateUrl: './cursos-pago.component.html'
})
export class CursosPagoComponent implements OnInit {
  constructor(private breadcrumbService: BreadcrumbService) {
       this.breadcrumbService.setItems([
           {label: 'CEC-Y', routerLink: ['/cecy/dashboard/bienvenida']},
           {label: 'Cursos De Paga'},
       ]);
   }
ngOnInit(){}
}
