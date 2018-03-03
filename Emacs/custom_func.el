;; removes all timing in .srt file
;; usage --> just multiply it by <C-u 1100>

(fset 'srt-remove-timing-data
   (lambda (&optional arg) "Keyboard macro." (interactive "p") (kmacro-exec-ring-item (quote ("

 OBOB" 0 "%d")) arg)))

;; move the relatively rare words to a special place
(fset 'separate-rare-words
   (lambda (&optional arg) "Keyboard macro." (interactive "p") (kmacro-exec-ring-item (quote ("</p [1;5Aq brare		OD" 0 "%d")) arg)))

;; create a drill item out from ordinary voca-builder item


;; create a drill item out from rare word


(custom-set-variables
 ;; custom-set-variables was added by Custom.
 ;; If you edit it by hand, you could mess it up, so be careful.
 ;; Your init file should contain only one such instance.
 ;; If there is more than one, they won't work right.
 '(Info-additional-directory-list
   (quote
    ("/usr/share/info/scrapy/" "/usr/share/info/python3.4/" "/usr/share/info/postgres/")))
 '(bmkp-last-as-first-bookmark-file "/home/alioth/.emacs.d/bookmarks")
 '(org-agenda-files (quote ("/usr/local/git/0--key/lib/org/agenda/main.org")))
 '(org-confirm-babel-evaluate nil)
 '(org-icalendar-include-todo (quote unblocked))
 '(org-icalendar-use-deadline (quote (todo-due)))
 '(org-icalendar-use-scheduled (quote (todo-start)))
 '(org-modules
   (quote
    (org-bbdb org-bibtex org-docview org-gnus org-info org-irc org-mhe org-rmail org-w3m org-drill)))
 '(org-src-window-setup (quote other-frame))
 '(package-selected-packages
   (quote
    (htmlize langtool org bookmark+ color-theme elfeed elpy google-translate howdoi key-chord magit marshal org-bullets org-pomodoro pcache travis voca-builder ereader docker))))
(custom-set-faces
 ;; custom-set-faces was added by Custom.
 ;; If you edit it by hand, you could mess it up, so be careful.
 ;; Your init file should contain only one such instance.
 ;; If there is more than one, they won't work right.
 )
