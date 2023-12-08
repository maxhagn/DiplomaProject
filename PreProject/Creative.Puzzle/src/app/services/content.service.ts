import {Injectable} from '@angular/core';
import {mockContent} from './mock-content'
import {mockNavigation} from "./mock-navigation";

@Injectable()
export class ContentService {
  getContent(): any {
    return Promise.resolve(mockContent);
  }
}

@Injectable()
export class NavigationService {
  getNavigation(): any {
    return Promise.resolve(mockNavigation);
  }
}
