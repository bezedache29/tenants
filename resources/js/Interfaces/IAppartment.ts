import { IAddress } from "./IAddress";

export interface IAppartment {
  id: number,
  name: string,
  short_name: string,
  is_commercial: 0 | 1;
  stage: string;
  address: IAddress
}