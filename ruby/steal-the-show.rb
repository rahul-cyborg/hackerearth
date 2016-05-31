temp = gets.chomp.strip.split(' ').map(&:to_i)

out = []

cto = temp[1]
coo = temp[2]

if cto < coo
  out << cto
else
  out << coo
end

if cto > coo
  out << cto
else
  out << coo
end

out.insert(1, temp[0]) 

n = gets.chomp.strip.to_i
emp = gets.chomp.strip.split(' ').map(&:to_i).sort

n1 = n / 2
m = n1

if n.odd?
  if emp[n1] < out[1]
    m = n1 + 1
  end
end


(0...m).each do |i|
  out.insert(1 + i, emp[i]) 
end


(m...n).each do |i|
  out.insert(n1 + i + 1, emp[i]) 
end

sum = 0

(0...out.length - 1).each do |k|
  diff = (out[k] - out[k + 1]).abs 
  sum += diff
end

puts sum