dir="$(realpath "$(dirname "$0")/../")" # Absolute path to root project folder
opts="${*:2}"

remoteSync() {
    dest_path="nft:public_html/redback/"
    excludes="$dir/console/sync-exclude.txt"
    rsync -rct --progress --delete "$dir/" "$dest_path" --exclude-from="$excludes" $opts
}

localSync() {
    dest_path="$HOME/Programs/Web/redback/"
    rsync -rct --progress --delete "$dir/" "$dest_path" $opts
}

# Execute
if [ "$1" == 'remote' ]; then remoteSync;
elif [ "$1" == 'local' ]; then localSync;
else echo "Usage: [remote|local] [Options]";
fi