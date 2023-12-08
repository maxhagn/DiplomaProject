import {Component, OnInit} from '@angular/core';
import {ContentService, NavigationService} from '../../services/content.service'

@Component({
  selector: 'content',
  templateUrl: 'app/components/content/content.component.html',
  styleUrls: ['app/components/content/content.component.css'],
  providers: [ContentService, NavigationService],
})

export class ContentComponent implements OnInit {
  TaskArray: any[];
  NavigationArray: any[];
  order: number;
  navigationOpen: boolean;
  windowHeight: number;
  windowWidth: number;

  constructor(private contentService_: ContentService, private navigationService_: NavigationService) {
    this.order = 1;
    this.navigationOpen = false;
  }

  getContent(): void {
    this.contentService_.getContent().then((TaskArray: any[]) => {
      this.TaskArray = TaskArray;
      this.sort(this.TaskArray);
    });
  }

  getNavigation(): void {
    this.navigationService_.getNavigation().then((NavigationArray: any[]) => {
      this.NavigationArray = NavigationArray;
      this.sort(this.NavigationArray);
    });
  }

  ngOnInit(): void {
    this.windowWidth = innerWidth;
    console.log("Height: " + this.windowHeight + "Width: " + this.windowWidth);
    this.getContent();
    this.getNavigation();
  }

  openSub(elem: any): void {
    this.order = this.NavigationArray[this.NavigationArray.indexOf(elem)].order;

    /*   for (let entry of this.TaskArray) {
     if (entry.order == this.order) {
     this.TaskArray.unshift({
     Date: new Date(2017, 1, 12, 13, 15),
     header: "Who we are?",
     content: "We are a team of students from HTL Rennweg. In our final year we have to do a thesis. Lately there were pretty lame diploma projects in our school. So we thought that we need to stop that. Everyone of us loves coding and being creative, so the idea of a CSS framework was born. We are sure that you are now thinking “Mhm but there are already so many frameworks and they are all the same”. Yes, you are right but we are different. We are aware of the different frameworks like bootstrap, materialize… . However, the major difference that makes us unique and special is that we provide a detailed documentation about our code, problems and tips to avoid difficulties. ",
     order: 1,
     size: 1,
     author: "Maximilian Hagn"
     });
     }
     }
     console.log(this.TaskArray);*/
    if (this.NavigationArray[this.NavigationArray.indexOf(elem)].sub_1 !== "") {
      if (this.NavigationArray[this.NavigationArray.indexOf(elem)].open === false) {
        this.NavigationArray[this.NavigationArray.indexOf(elem)].open = true;
      } else {
        this.NavigationArray[this.NavigationArray.indexOf(elem)].open = false;
      }
    }
  }

  sort(TaskArray: any[]) {
    return TaskArray.sort(function (a, b) {
      return a.Date - b.Date;
    });
  }

  formatDate(date: any) {
    let options = {day: 'numeric', month: 'numeric', year: 'numeric', hour: 'numeric', minute: '2-digit'};
    return date.toLocaleString('de-AT', options);
  }

  openNav() {
    if (this.navigationOpen == false) {
      this.navigationOpen = true;
    } else {
      this.navigationOpen = false;
    }
  }


}
