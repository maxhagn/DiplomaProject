import {NgModule} from '@angular/core';
import {BrowserModule} from '@angular/platform-browser';
import {FormsModule} from "@angular/forms";
import {HttpModule} from "@angular/http";

import {ContentComponent} from '../content/content.component';
import {AppComponent} from './app.component'
import {routing} from '../../routes/app.routing'


@NgModule({
  imports: [BrowserModule, FormsModule, HttpModule, routing],
  declarations: [ContentComponent, AppComponent],
  bootstrap: [AppComponent]
})

export class AppModule {
}
