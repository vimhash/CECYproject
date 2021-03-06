import { NgModule } from "@angular/core";
import { RouterModule } from "@angular/router";
import { CommonModule } from "@angular/common";
import { HomeRoutes } from "./academic-records.routing";
import { FormsModule } from "@angular/forms";
import { AutoCompleteModule } from "primeng/autocomplete";
import { MultiSelectModule } from "primeng/multiselect";
import { CalendarModule } from "primeng/calendar";
import { ChipsModule } from "primeng/chips";
import { CheckboxModule } from "primeng/checkbox";
import { RadioButtonModule } from "primeng/radiobutton";
import { InputMaskModule } from "primeng/inputmask";
import { InputSwitchModule } from "primeng/inputswitch";
import { InputTextModule } from "primeng/inputtext";
import { InputTextareaModule } from "primeng/inputtextarea";
import { DropdownModule } from "primeng/dropdown";
import { SpinnerModule } from "primeng/spinner";
import { SliderModule } from "primeng/slider";
import { LightboxModule } from "primeng/lightbox";
import { ListboxModule } from "primeng/listbox";
import { RatingModule } from "primeng/rating";
import { ColorPickerModule } from "primeng/colorpicker";
import { EditorModule } from "primeng/editor";
import { ToggleButtonModule } from "primeng/togglebutton";
import { SelectButtonModule } from "primeng/selectbutton";
import { SplitButtonModule } from "primeng/splitbutton";
import { PasswordModule } from "primeng/password";
import { TableModule } from "primeng/table";
import { SeeAcademicRecordsComponent } from "./see-academic-records/see-academic-records.component";
import { DetailAcademicRecordComponent } from "./detail-academic-record/detail-academic-record.component";

@NgModule({
  imports: [
    CommonModule,
    RouterModule.forChild(HomeRoutes),
    FormsModule,
    AutoCompleteModule,
    MultiSelectModule,
    CalendarModule,
    ChipsModule,
    CheckboxModule,
    RadioButtonModule,
    InputMaskModule,
    InputSwitchModule,
    InputTextModule,
    InputTextareaModule,
    DropdownModule,
    SpinnerModule,
    SliderModule,
    LightboxModule,
    ListboxModule,
    RatingModule,
    ColorPickerModule,
    EditorModule,
    ToggleButtonModule,
    SelectButtonModule,
    SplitButtonModule,
    PasswordModule,
    TableModule,
  ],
  declarations: [SeeAcademicRecordsComponent, DetailAcademicRecordComponent],
})
export class DashboardModule {}
