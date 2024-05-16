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

class UserModel extends BaseModel {
    constructor() {
        super();
        this.user = undefined;
    }

    init(user) {
        this.user = user;
    }
}


export const fileModel = useStore.bind(undefined, FileModel);
export const userModel = useStore.bind(undefined, UserModel);
