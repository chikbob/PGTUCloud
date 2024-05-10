import {BaseModel} from "../../models/base.model.js";
import {useStore} from "pinia-class-store";


class FileModel extends BaseModel {
    constructor() {
        super();
        this.file = undefined;
    }

    init(file) {
        this.file = file;
    }
}

export const fileModel = useStore.bind(undefined, FileModel);
