"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var core_1 = require('@angular/core');
var content_service_1 = require('../../services/content.service');
var ContentComponent = (function () {
    function ContentComponent(contentService_, navigationService_) {
        this.contentService_ = contentService_;
        this.navigationService_ = navigationService_;
        this.order = 1;
        this.navigationOpen = false;
    }
    ContentComponent.prototype.getContent = function () {
        var _this = this;
        this.contentService_.getContent().then(function (TaskArray) {
            _this.TaskArray = TaskArray;
            _this.sort(_this.TaskArray);
        });
    };
    ContentComponent.prototype.getNavigation = function () {
        var _this = this;
        this.navigationService_.getNavigation().then(function (NavigationArray) {
            _this.NavigationArray = NavigationArray;
            _this.sort(_this.NavigationArray);
        });
    };
    ContentComponent.prototype.ngOnInit = function () {
        this.windowWidth = innerWidth;
        console.log("Height: " + this.windowHeight + "Width: " + this.windowWidth);
        this.getContent();
        this.getNavigation();
    };
    ContentComponent.prototype.openSub = function (elem) {
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
            }
            else {
                this.NavigationArray[this.NavigationArray.indexOf(elem)].open = false;
            }
        }
    };
    ContentComponent.prototype.sort = function (TaskArray) {
        return TaskArray.sort(function (a, b) {
            return a.Date - b.Date;
        });
    };
    ContentComponent.prototype.formatDate = function (date) {
        var options = { day: 'numeric', month: 'numeric', year: 'numeric', hour: 'numeric', minute: '2-digit' };
        return date.toLocaleString('de-AT', options);
    };
    ContentComponent.prototype.openNav = function () {
        if (this.navigationOpen == false) {
            this.navigationOpen = true;
        }
        else {
            this.navigationOpen = false;
        }
    };
    ContentComponent = __decorate([
        core_1.Component({
            selector: 'content',
            templateUrl: 'app/components/content/content.component.html',
            styleUrls: ['app/components/content/content.component.css'],
            providers: [content_service_1.ContentService, content_service_1.NavigationService],
        }), 
        __metadata('design:paramtypes', [content_service_1.ContentService, content_service_1.NavigationService])
    ], ContentComponent);
    return ContentComponent;
}());
exports.ContentComponent = ContentComponent;
//# sourceMappingURL=content.component.js.map